<?php

namespace Sunaoka\Aws\Structures\QApps\CreatePresignedUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $cardId
 * @property string $appId
 * @property string $fileContentsSha256
 * @property string $fileName
 * @property 'APPLICATION'|'SESSION' $scope
 * @property string $sessionId
 */
class CreatePresignedUrlRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     cardId: string,
     *     appId: string,
     *     fileContentsSha256: string,
     *     fileName: string,
     *     scope: 'APPLICATION'|'SESSION',
     *     sessionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
