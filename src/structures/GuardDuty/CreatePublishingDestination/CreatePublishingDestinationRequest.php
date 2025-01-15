<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreatePublishingDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property 'S3' $DestinationType
 * @property Shapes\DestinationProperties $DestinationProperties
 * @property string|null $ClientToken
 */
class CreatePublishingDestinationRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     DestinationType: 'S3',
     *     DestinationProperties: Shapes\DestinationProperties,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
