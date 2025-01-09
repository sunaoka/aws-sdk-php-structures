<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListFaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $UserId
 * @property list<string> $FaceIds
 */
class ListFacesRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     UserId?: string,
     *     FaceIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
