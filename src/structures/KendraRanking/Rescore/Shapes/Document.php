<?php

namespace Sunaoka\Aws\Structures\KendraRanking\Rescore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $GroupId
 * @property string $Title
 * @property string $Body
 * @property list<string> $TokenizedTitle
 * @property list<string> $TokenizedBody
 * @property float $OriginalScore
 */
class Document extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     GroupId?: string,
     *     Title?: string,
     *     Body?: string,
     *     TokenizedTitle?: list<string>,
     *     TokenizedBody?: list<string>,
     *     OriginalScore: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
