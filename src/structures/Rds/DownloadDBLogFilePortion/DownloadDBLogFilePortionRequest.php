<?php

namespace Sunaoka\Aws\Structures\Rds\DownloadDBLogFilePortion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $LogFileName
 * @property string|null $Marker
 * @property int|null $NumberOfLines
 */
class DownloadDBLogFilePortionRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     LogFileName: string,
     *     Marker?: string|null,
     *     NumberOfLines?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
