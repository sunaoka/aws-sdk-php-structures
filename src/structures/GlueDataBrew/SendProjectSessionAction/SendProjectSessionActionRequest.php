<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\SendProjectSessionAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $Preview
 * @property string $Name
 * @property Shapes\RecipeStep $RecipeStep
 * @property int<0, max> $StepIndex
 * @property string $ClientSessionId
 * @property Shapes\ViewFrame $ViewFrame
 */
class SendProjectSessionActionRequest extends Request
{
    /**
     * @param array{
     *     Preview?: bool,
     *     Name: string,
     *     RecipeStep?: Shapes\RecipeStep,
     *     StepIndex?: int<0, max>,
     *     ClientSessionId?: string,
     *     ViewFrame?: Shapes\ViewFrame
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
