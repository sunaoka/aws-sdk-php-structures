<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateWebExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'FIREFOX'|'CHROME'> $enabledBrowserExtensions
 */
class BrowserExtensionConfiguration extends Shape
{
    /**
     * @param array{enabledBrowserExtensions: list<'FIREFOX'|'CHROME'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
