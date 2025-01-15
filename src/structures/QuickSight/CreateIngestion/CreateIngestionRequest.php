<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateIngestion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property string $IngestionId
 * @property string $AwsAccountId
 * @property 'INCREMENTAL_REFRESH'|'FULL_REFRESH'|null $IngestionType
 */
class CreateIngestionRequest extends Request
{
    /**
     * @param array{
     *     DataSetId: string,
     *     IngestionId: string,
     *     AwsAccountId: string,
     *     IngestionType?: 'INCREMENTAL_REFRESH'|'FULL_REFRESH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
