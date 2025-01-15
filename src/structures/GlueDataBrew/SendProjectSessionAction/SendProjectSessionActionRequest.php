<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\SendProjectSessionAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $Preview
 * @property string $Name
 * @property Shapes\RecipeStep|null $RecipeStep
 * @property int<0, max>|null $StepIndex
 * @property string|null $ClientSessionId
 * @property Shapes\ViewFrame|null $ViewFrame
 */
class SendProjectSessionActionRequest extends Request
{
    /**
     * @param array{
     *     Preview?: bool|null,
     *     Name: string,
     *     RecipeStep?: Shapes\RecipeStep|null,
     *     StepIndex?: int<0, max>|null,
     *     ClientSessionId?: string|null,
     *     ViewFrame?: Shapes\ViewFrame|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
