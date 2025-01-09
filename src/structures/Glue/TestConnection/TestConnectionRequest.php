<?php

namespace Sunaoka\Aws\Structures\Glue\TestConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionName
 * @property string $CatalogId
 * @property Shapes\TestConnectionInput $TestConnectionInput
 */
class TestConnectionRequest extends Request
{
    /**
     * @param array{
     *     ConnectionName?: string,
     *     CatalogId?: string,
     *     TestConnectionInput?: Shapes\TestConnectionInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
