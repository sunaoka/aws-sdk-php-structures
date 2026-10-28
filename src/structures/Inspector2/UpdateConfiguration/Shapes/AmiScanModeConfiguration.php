<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SCAN_ALL'|'TARGET_SCANNING' $scanMode
 * @property list<AmiTagFilter>|null $tags
 * @property bool|null $excludeCopiedAmis
 * @property bool|null $excludeBackupDlmAmis
 */
class AmiScanModeConfiguration extends Shape
{
    /**
     * @param array{
     *     scanMode: 'SCAN_ALL'|'TARGET_SCANNING',
     *     tags?: list<AmiTagFilter>|null,
     *     excludeCopiedAmis?: bool|null,
     *     excludeBackupDlmAmis?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
