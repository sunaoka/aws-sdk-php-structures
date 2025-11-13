<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetSessionLogger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Unit|null $all
 * @property list<'WebsiteInteract'|'FileDownloadFromSecureBrowserToRemoteDisk'|'FileTransferFromRemoteToLocalDisk'|'FileTransferFromLocalToRemoteDisk'|'FileUploadFromRemoteDiskToSecureBrowser'|'ContentPasteToWebsite'|'ContentTransferFromLocalToRemoteClipboard'|'ContentCopyFromWebsite'|'UrlLoad'|'TabOpen'|'TabClose'|'PrintJobSubmit'|'SessionConnect'|'SessionStart'|'SessionDisconnect'|'SessionEnd'|'UrlBlockByContentFilter'>|null $include
 */
class EventFilter extends Shape
{
    /**
     * @param array{
     *     all?: Unit|null,
     *     include?: list<'WebsiteInteract'|'FileDownloadFromSecureBrowserToRemoteDisk'|'FileTransferFromRemoteToLocalDisk'|'FileTransferFromLocalToRemoteDisk'|'FileUploadFromRemoteDiskToSecureBrowser'|'ContentPasteToWebsite'|'ContentTransferFromLocalToRemoteClipboard'|'ContentCopyFromWebsite'|'UrlLoad'|'TabOpen'|'TabClose'|'PrintJobSubmit'|'SessionConnect'|'SessionStart'|'SessionDisconnect'|'SessionEnd'|'UrlBlockByContentFilter'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
