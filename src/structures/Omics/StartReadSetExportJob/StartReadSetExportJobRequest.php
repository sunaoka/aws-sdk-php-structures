<?php

namespace Sunaoka\Aws\Structures\Omics\StartReadSetExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property string $destination
 * @property string $roleArn
 * @property string $clientToken
 * @property list<Shapes\ExportReadSet> $sources
 */
class StartReadSetExportJobRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     destination: string,
     *     roleArn: string,
     *     clientToken?: string,
     *     sources: list<Shapes\ExportReadSet>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
