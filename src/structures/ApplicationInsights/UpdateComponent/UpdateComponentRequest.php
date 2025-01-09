<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $ComponentName
 * @property string $NewComponentName
 * @property list<string> $ResourceList
 */
class UpdateComponentRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     ComponentName: string,
     *     NewComponentName?: string,
     *     ResourceList?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
