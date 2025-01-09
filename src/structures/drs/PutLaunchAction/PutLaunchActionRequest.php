<?php

namespace Sunaoka\Aws\Structures\drs\PutLaunchAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $actionCode
 * @property string $actionId
 * @property string $actionVersion
 * @property bool $active
 * @property 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER' $category
 * @property string $description
 * @property string $name
 * @property bool $optional
 * @property int<2, 10000> $order
 * @property array<string, Shapes\LaunchActionParameter> $parameters
 * @property string $resourceId
 */
class PutLaunchActionRequest extends Request
{
    /**
     * @param array{
     *     actionCode: string,
     *     actionId: string,
     *     actionVersion: string,
     *     active: bool,
     *     category: 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER',
     *     description: string,
     *     name: string,
     *     optional: bool,
     *     order: int<2, 10000>,
     *     parameters?: array<string, Shapes\LaunchActionParameter>,
     *     resourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
