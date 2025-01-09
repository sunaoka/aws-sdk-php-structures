<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ValidatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $findingDetails
 * @property 'ERROR'|'SECURITY_WARNING'|'SUGGESTION'|'WARNING' $findingType
 * @property string $issueCode
 * @property string $learnMoreLink
 * @property list<Location> $locations
 */
class ValidatePolicyFinding extends Shape
{
    /**
     * @param array{
     *     findingDetails: string,
     *     findingType: 'ERROR'|'SECURITY_WARNING'|'SUGGESTION'|'WARNING',
     *     issueCode: string,
     *     learnMoreLink: string,
     *     locations: list<Location>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
