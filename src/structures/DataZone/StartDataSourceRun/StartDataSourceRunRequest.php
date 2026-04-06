<?php

namespace Sunaoka\Aws\Structures\DataZone\StartDataSourceRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $dataSourceIdentifier
 * @property string|null $clientToken
 */
class StartDataSourceRunRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     dataSourceIdentifier: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
