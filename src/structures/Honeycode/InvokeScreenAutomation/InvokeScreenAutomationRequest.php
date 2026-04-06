<?php

namespace Sunaoka\Aws\Structures\Honeycode\InvokeScreenAutomation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workbookId
 * @property string $appId
 * @property string $screenId
 * @property string $screenAutomationId
 * @property array<string, Shapes\VariableValue>|null $variables
 * @property string|null $rowId
 * @property string|null $clientRequestToken
 */
class InvokeScreenAutomationRequest extends Request
{
    /**
     * @param array{
     *     workbookId: string,
     *     appId: string,
     *     screenId: string,
     *     screenAutomationId: string,
     *     variables?: array<string, Shapes\VariableValue>|null,
     *     rowId?: string|null,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
