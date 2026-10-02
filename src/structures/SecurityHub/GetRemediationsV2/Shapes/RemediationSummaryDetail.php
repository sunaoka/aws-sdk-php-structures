<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Action
 * @property string|null $Description
 * @property bool $IsImmediate
 * @property list<string>|null $PostRemediationSteps
 * @property list<KbArticle>|null $KbArticles
 */
class RemediationSummaryDetail extends Shape
{
    /**
     * @param array{
     *     Action: string,
     *     Description?: string|null,
     *     IsImmediate: bool,
     *     PostRemediationSteps?: list<string>|null,
     *     KbArticles?: list<KbArticle>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
