<?php

namespace Sunaoka\Aws\Structures\DataZone\GetTimeSeriesDataPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'ASSET'|'LISTING' $entityType
 * @property string $identifier
 * @property string $formName
 */
class GetTimeSeriesDataPointRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'ASSET'|'LISTING',
     *     identifier: string,
     *     formName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
