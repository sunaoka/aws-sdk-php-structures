<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListImageSetVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property string $imageSetId
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 */
class ListImageSetVersionsRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     imageSetId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
