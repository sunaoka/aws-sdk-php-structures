<?php

namespace Sunaoka\Aws\Structures\FSx\CopyBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $SourceBackupId
 * @property string $SourceRegion
 * @property string $KmsKeyId
 * @property bool $CopyTags
 * @property list<Shapes\Tag> $Tags
 */
class CopyBackupRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     SourceBackupId: string,
     *     SourceRegion?: string,
     *     KmsKeyId?: string,
     *     CopyTags?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
