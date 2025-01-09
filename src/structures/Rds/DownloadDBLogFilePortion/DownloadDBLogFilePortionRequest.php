<?php

namespace Sunaoka\Aws\Structures\Rds\DownloadDBLogFilePortion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $LogFileName
 * @property string $Marker
 * @property int $NumberOfLines
 */
class DownloadDBLogFilePortionRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     LogFileName: string,
     *     Marker?: string,
     *     NumberOfLines?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
