<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateFaceLivenessSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $KmsKeyId
 * @property Shapes\CreateFaceLivenessSessionRequestSettings|null $Settings
 * @property string|null $ClientRequestToken
 */
class CreateFaceLivenessSessionRequest extends Request
{
    /**
     * @param array{
     *     KmsKeyId?: string|null,
     *     Settings?: Shapes\CreateFaceLivenessSessionRequestSettings|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
