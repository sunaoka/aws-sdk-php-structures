<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $importId
 */
class GetImportRequest extends Request
{
    /**
     * @param array{importId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
