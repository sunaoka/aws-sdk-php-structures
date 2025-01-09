<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxDataview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string $dataviewName
 */
class GetKxDataviewRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     databaseName: string,
     *     dataviewName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
