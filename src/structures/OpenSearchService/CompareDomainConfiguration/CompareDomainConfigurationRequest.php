<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CompareDomainConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDomainArn
 * @property string $TargetDomainArn
 * @property list<string> $Categories
 */
class CompareDomainConfigurationRequest extends Request
{
    /**
     * @param array{
     *     SourceDomainArn: string,
     *     TargetDomainArn: string,
     *     Categories: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
