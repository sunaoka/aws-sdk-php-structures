<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteTimeSeriesDataPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'ASSET'|'LISTING' $entityType
 * @property string $formName
 */
class DeleteTimeSeriesDataPointsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'ASSET'|'LISTING',
     *     formName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
