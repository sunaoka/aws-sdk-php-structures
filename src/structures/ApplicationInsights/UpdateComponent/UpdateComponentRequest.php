<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $ComponentName
 * @property string|null $NewComponentName
 * @property list<string>|null $ResourceList
 */
class UpdateComponentRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     ComponentName: string,
     *     NewComponentName?: string|null,
     *     ResourceList?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
