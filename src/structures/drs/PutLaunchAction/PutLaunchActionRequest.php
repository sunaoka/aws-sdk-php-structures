<?php

namespace Sunaoka\Aws\Structures\drs\PutLaunchAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceId
 * @property string $actionCode
 * @property int<2, 10000> $order
 * @property string $actionId
 * @property bool $optional
 * @property bool $active
 * @property string $name
 * @property string $actionVersion
 * @property 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER' $category
 * @property array<string, Shapes\LaunchActionParameter>|null $parameters
 * @property string $description
 */
class PutLaunchActionRequest extends Request
{
    /**
     * @param array{
     *     resourceId: string,
     *     actionCode: string,
     *     order: int<2, 10000>,
     *     actionId: string,
     *     optional: bool,
     *     active: bool,
     *     name: string,
     *     actionVersion: string,
     *     category: 'MONITORING'|'VALIDATION'|'CONFIGURATION'|'SECURITY'|'OTHER',
     *     parameters?: array<string, Shapes\LaunchActionParameter>|null,
     *     description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
