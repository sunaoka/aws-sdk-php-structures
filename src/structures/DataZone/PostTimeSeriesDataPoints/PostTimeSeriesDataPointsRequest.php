<?php

namespace Sunaoka\Aws\Structures\DataZone\PostTimeSeriesDataPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'ASSET'|'LISTING' $entityType
 * @property list<Shapes\TimeSeriesDataPointFormInput> $forms
 * @property string|null $clientToken
 */
class PostTimeSeriesDataPointsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'ASSET'|'LISTING',
     *     forms: list<Shapes\TimeSeriesDataPointFormInput>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
