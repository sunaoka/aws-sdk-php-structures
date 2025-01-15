<?php

namespace Sunaoka\Aws\Structures\Rekognition\AssociateFaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string $UserId
 * @property list<string> $FaceIds
 * @property float|null $UserMatchThreshold
 * @property string|null $ClientRequestToken
 */
class AssociateFacesRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     UserId: string,
     *     FaceIds: list<string>,
     *     UserMatchThreshold?: float|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
