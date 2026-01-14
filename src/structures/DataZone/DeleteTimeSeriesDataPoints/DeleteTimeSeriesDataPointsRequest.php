<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteTimeSeriesDataPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'ASSET'|'LISTING' $entityType
 * @property string $formName
 * @property string|null $clientToken
 */
class DeleteTimeSeriesDataPointsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'ASSET'|'LISTING',
     *     formName: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
