<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $claimName
 * @property 'SINGLE_STRING' $format
 * @property bool|null $required
 * @property list<string>|null $expectedValues
 */
class JwtAdditionalClaim extends Shape
{
    /**
     * @param array{
     *     claimName: string,
     *     format: 'SINGLE_STRING',
     *     required?: bool|null,
     *     expectedValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
