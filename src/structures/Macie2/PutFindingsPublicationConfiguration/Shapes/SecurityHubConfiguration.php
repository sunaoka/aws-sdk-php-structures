<?php

namespace Sunaoka\Aws\Structures\Macie2\PutFindingsPublicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $publishClassificationFindings
 * @property bool $publishPolicyFindings
 */
class SecurityHubConfiguration extends Shape
{
    /**
     * @param array{
     *     publishClassificationFindings: bool,
     *     publishPolicyFindings: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
