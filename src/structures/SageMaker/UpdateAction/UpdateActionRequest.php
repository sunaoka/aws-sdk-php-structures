<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActionName
 * @property string $Description
 * @property 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $Status
 * @property array<string, string> $Properties
 * @property list<string> $PropertiesToRemove
 */
class UpdateActionRequest extends Request
{
    /**
     * @param array{
     *     ActionName: string,
     *     Description?: string,
     *     Status?: 'Unknown'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     Properties?: array<string, string>,
     *     PropertiesToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
