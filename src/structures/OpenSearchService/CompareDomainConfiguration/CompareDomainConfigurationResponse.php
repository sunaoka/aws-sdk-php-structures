<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CompareDomainConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SourceDomainArn
 * @property string|null $TargetDomainArn
 * @property array<string, Shapes\CategoryDiffResult>|null $Categories
 */
class CompareDomainConfigurationResponse extends Response
{
}
