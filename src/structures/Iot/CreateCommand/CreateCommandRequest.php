<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commandId
 * @property 'AWS-IoT'|'AWS-IoT-FleetWise'|null $namespace
 * @property string|null $displayName
 * @property string|null $description
 * @property Shapes\CommandPayload|null $payload
 * @property string|null $payloadTemplate
 * @property Shapes\CommandPreprocessor|null $preprocessor
 * @property list<Shapes\CommandParameter>|null $mandatoryParameters
 * @property string|null $roleArn
 * @property list<Shapes\Tag>|null $tags
 */
class CreateCommandRequest extends Request
{
    /**
     * @param array{
     *     commandId: string,
     *     namespace?: 'AWS-IoT'|'AWS-IoT-FleetWise'|null,
     *     displayName?: string|null,
     *     description?: string|null,
     *     payload?: Shapes\CommandPayload|null,
     *     payloadTemplate?: string|null,
     *     preprocessor?: Shapes\CommandPreprocessor|null,
     *     mandatoryParameters?: list<Shapes\CommandParameter>|null,
     *     roleArn?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
