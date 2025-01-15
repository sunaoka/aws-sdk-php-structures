<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListFaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string|null $NextToken
 * @property int<0, 4096>|null $MaxResults
 * @property string|null $UserId
 * @property list<string>|null $FaceIds
 */
class ListFacesRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 4096>|null,
     *     UserId?: string|null,
     *     FaceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
