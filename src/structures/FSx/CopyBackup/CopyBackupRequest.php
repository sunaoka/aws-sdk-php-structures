<?php

namespace Sunaoka\Aws\Structures\FSx\CopyBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $SourceBackupId
 * @property string|null $SourceRegion
 * @property string|null $KmsKeyId
 * @property bool|null $CopyTags
 * @property list<Shapes\Tag>|null $Tags
 */
class CopyBackupRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     SourceBackupId: string,
     *     SourceRegion?: string|null,
     *     KmsKeyId?: string|null,
     *     CopyTags?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
