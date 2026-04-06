<?php

namespace Sunaoka\Aws\Structures\QApps\ImportDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $cardId
 * @property string $appId
 * @property string $fileContentsBase64
 * @property string $fileName
 * @property 'APPLICATION'|'SESSION' $scope
 * @property string|null $sessionId
 */
class ImportDocumentRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     cardId: string,
     *     appId: string,
     *     fileContentsBase64: string,
     *     fileName: string,
     *     scope: 'APPLICATION'|'SESSION',
     *     sessionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
