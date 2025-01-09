<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\SendProjectSessionAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $Preview
 * @property string $Name
 * @property Shapes\RecipeStep $RecipeStep
 * @property int $StepIndex
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
     *     StepIndex?: int,
     *     ClientSessionId?: string,
     *     ViewFrame?: Shapes\ViewFrame
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
