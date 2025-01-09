<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DisableKinesisStreamingDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property string $StreamArn
 * @property Shapes\EnableKinesisStreamingConfiguration $EnableKinesisStreamingConfiguration
 */
class DisableKinesisStreamingDestinationRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     StreamArn: string,
     *     EnableKinesisStreamingConfiguration?: Shapes\EnableKinesisStreamingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
