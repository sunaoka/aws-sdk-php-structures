<?php

namespace Sunaoka\Aws\Structures\Rekognition\DisassociateFaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string $UserId
 * @property string $ClientRequestToken
 * @property list<string> $FaceIds
 */
class DisassociateFacesRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     UserId: string,
     *     ClientRequestToken?: string,
     *     FaceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
