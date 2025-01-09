<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysisSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DocumentGroup> $DocumentGroups
 * @property list<string> $UndetectedDocumentTypes
 */
class LendingSummary extends Shape
{
    /**
     * @param array{
     *     DocumentGroups?: list<DocumentGroup>,
     *     UndetectedDocumentTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
