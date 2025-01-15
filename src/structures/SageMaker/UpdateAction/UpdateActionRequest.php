<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActionName
 * @property string|null $Description
 * @property 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $Status
 * @property array<string, string>|null $Properties
 * @property list<string>|null $PropertiesToRemove
 */
class UpdateActionRequest extends Request
{
    /**
     * @param array{
     *     ActionName: string,
     *     Description?: string|null,
     *     Status?: 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null,
     *     Properties?: array<string, string>|null,
     *     PropertiesToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
