<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateFaceLivenessSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KmsKeyId
 * @property Shapes\CreateFaceLivenessSessionRequestSettings $Settings
 * @property string $ClientRequestToken
 */
class CreateFaceLivenessSessionRequest extends Request
{
    /**
     * @param array{
     *     KmsKeyId?: string,
     *     Settings?: Shapes\CreateFaceLivenessSessionRequestSettings,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
