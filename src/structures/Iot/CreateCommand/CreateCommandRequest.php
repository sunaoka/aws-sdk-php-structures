<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commandId
 * @property 'AWS-IoT'|'AWS-IoT-FleetWise' $namespace
 * @property string $displayName
 * @property string $description
 * @property Shapes\CommandPayload $payload
 * @property list<Shapes\CommandParameter> $mandatoryParameters
 * @property string $roleArn
 * @property list<Shapes\Tag> $tags
 */
class CreateCommandRequest extends Request
{
    /**
     * @param array{
     *     commandId: string,
     *     namespace?: 'AWS-IoT'|'AWS-IoT-FleetWise',
     *     displayName?: string,
     *     description?: string,
     *     payload?: Shapes\CommandPayload,
     *     mandatoryParameters?: list<Shapes\CommandParameter>,
     *     roleArn?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
