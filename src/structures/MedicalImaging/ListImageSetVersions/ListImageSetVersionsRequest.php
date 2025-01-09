<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListImageSetVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property string $imageSetId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListImageSetVersionsRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     imageSetId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
