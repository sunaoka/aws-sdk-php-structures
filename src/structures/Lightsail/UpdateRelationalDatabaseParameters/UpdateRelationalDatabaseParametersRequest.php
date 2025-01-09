<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateRelationalDatabaseParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property list<Shapes\RelationalDatabaseParameter> $parameters
 */
class UpdateRelationalDatabaseParametersRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     parameters: list<Shapes\RelationalDatabaseParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
