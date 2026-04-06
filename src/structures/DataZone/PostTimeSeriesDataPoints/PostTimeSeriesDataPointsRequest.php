<?php

namespace Sunaoka\Aws\Structures\DataZone\PostTimeSeriesDataPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'ASSET'|'LISTING' $entityType
 * @property list<Shapes\TimeSeriesDataPointFormInput> $forms
 */
class PostTimeSeriesDataPointsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'ASSET'|'LISTING',
     *     forms: list<Shapes\TimeSeriesDataPointFormInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
