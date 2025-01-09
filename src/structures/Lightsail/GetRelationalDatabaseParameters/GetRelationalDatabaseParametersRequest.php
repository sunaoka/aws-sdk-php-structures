<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property string $pageToken
 */
class GetRelationalDatabaseParametersRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     pageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
