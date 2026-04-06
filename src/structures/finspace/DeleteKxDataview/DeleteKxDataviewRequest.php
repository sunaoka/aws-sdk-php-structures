<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxDataview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string $dataviewName
 * @property string $clientToken
 */
class DeleteKxDataviewRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     databaseName: string,
     *     dataviewName: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
