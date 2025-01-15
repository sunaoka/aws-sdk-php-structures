<?php

namespace Sunaoka\Aws\Structures\kendra\DescribePrincipalMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string|null $DataSourceId
 * @property string $GroupId
 */
class DescribePrincipalMappingRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     DataSourceId?: string|null,
     *     GroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
