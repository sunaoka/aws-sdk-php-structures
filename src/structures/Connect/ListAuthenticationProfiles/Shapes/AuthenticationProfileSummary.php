<?php

namespace Sunaoka\Aws\Structures\Connect\ListAuthenticationProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property bool $IsDefault
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class AuthenticationProfileSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     IsDefault?: bool,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
