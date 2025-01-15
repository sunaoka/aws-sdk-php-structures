<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property string|null $pageToken
 */
class GetRelationalDatabaseParametersRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     pageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
