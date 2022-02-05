<h3 class="font-size-24 orange-09 margin-bottom-16">Flexbox</h3>
<p class="margin-bottom-8">
    Amigo CSS has built in classes to help us make layouts using Flexbox. Layout is one of the very important features of any website and Amigo CSS makes creating layouts easy
</p>
<p class="margin-bottom-8">
By definition, flexbox is a layout model that allows us to build (lay out elements in) one-directional layouts.
</p>
<p class="margin-bottom-12">
&nbsp;A cousin of flexbox, css grid is a modern way of laying out elements in a 2-dimensional grid.
</p>

<h4 class="font-size-20 margin-bottom-12">Amigo CSS Flexbox Layout</h4>
<!--<p class="margin-bottom-8"><em>13 options</em></p>-->


<div class="padding-16 max-width-640 font-size-16 margin-bottom-48 background-white border-radious-5">
    <code>// Applied to the flex container</code>
    <code class="display-flex margin-top-12 margin-bottom-4">
        <strong class="flex-35percent">.display-flex</strong>
        <span>{ display: flex; }</span>
    </code>
    <code class="display-flex margin-bottom-24">
        <strong class="flex-35percent">.display-inline-flex</strong>
        <span>{ display: inline-flex; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-row</strong>
        <span>{ flex-direction: row; }</span> //default
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-row-reverse</strong>
        <span>{ flex-direction: row-reverse; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-column</strong>
        <span>{ flex-direction: column; }</span>
    </code>
    <code class="display-flex margin-bottom-24">
        <strong class="flex-35percent">.flex-column-reverse</strong>
        <span>{ flex-direction: column-reverse; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-justify-start</strong>
        <span>{ justify-content: start; }</span> //default
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-justify-end</strong>
        <span>{ justify-content: end; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-justify-center</strong>
        <span>{ justify-content: center; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-justify-between</strong>
        <span>{ justify-content: space-between; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-justify-around</strong>
        <span>{ justify-content: space-around; }</span>
    </code>
    <code class="display-flex margin-bottom-24">
        <strong class="flex-35percent">.flex-justify-evenly</strong>
        <span>{ justify-content: space-evenly; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-align-stretch</strong>
        <span>{ align-items: stretch; }</span> //default
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-align-center</strong>
        <span>{ align-items: center; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-align-start</strong>
        <span>{ align-items: start; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-align-end</strong>
        <span>{ align-items: end; }</span>
    </code>
    <code class="display-flex margin-bottom-24">
        <strong class="flex-35percent">.flex-align-baseline</strong>
        <span>{ align-items: baseline; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-nowrap</strong>
        <span>{ flex-wrap: nowrap; }</span> //default
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-wrap</strong>
        <span>{ flex-wrap: wrap; }</span>
    </code>
    <code class="display-flex margin-bottom-24">
        <strong class="flex-35percent">.flex-wrap-reverse</strong>
        <span>{ flex-wrap: wrap-reverse; }</span>
    </code>

    <code>// Applied to the flex items</code>
    <code class="display-flex margin-top-12 margin-bottom-4">
        <strong class="flex-35percent">.flex-self-auto</strong>
        <span>{ align-self: auto; }</span> //default
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-self-stretch</strong>
        <span>{ align-self: stretch; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-self-start</strong>
        <span>{ align-self: start; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-self-end</strong>
        <span>{ align-self: end; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-self-center</strong>
        <span>{ align-self: center; }</span>
    </code>
    <code class="display-flex margin-bottom-24">
        <strong class="flex-35percent">.flex-self-baseline</strong>
        <span>{ align-self: baseline; }</span>
    </code>

    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-grow-0</strong>
        <span>{ flex-grow: 0; }</span> //default
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-grow-1</strong>
        <span>{ flex-grow: 1; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-grow-2</strong>
        <span>{ flex-grow: 2; }</span>
    </code>
    <code class="display-flex margin-bottom-24">
        <strong class="flex-35percent">.flex-grow-3</strong>
        <span>{ flex-grow: 3; }</span>
    </code>

    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-shrink-1</strong>
        <span>{ flex-shrink: 1; }</span> //default
    </code>
    <code class="display-flex margin-bottom-24">
        <strong class="flex-35percent">.flex-shrink-0</strong>
        <span>{ flex-shrink: 0; }</span>
    </code>

    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-order-0</strong>
        <span>{ order: 0; }</span> //default
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-order-1</strong>
        <span>{ order: 1; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-order-2</strong>
        <span>{ order: 2; }</span>
    </code>
    <code class="display-flex margin-bottom-4">
        <strong class="flex-35percent">.flex-order-3</strong>
        <span>{ order: 3; }</span>
    </code>
    <code class="display-flex margin-bottom-24">
        <strong class="flex-35percent">.flex-order-minus-1</strong>
        <span>{ order: -1; }</span>
    </code>

</div>



