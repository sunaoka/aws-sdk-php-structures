<?php

namespace Sunaoka\Aws\Structures\kendra\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $DocumentId
 * @property string $DocumentTitle
 * @property string $Content
 * @property string $DocumentURI
 * @property list<DocumentAttribute> $DocumentAttributes
 * @property ScoreAttributes $ScoreAttributes
 */
class RetrieveResultItem extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     DocumentId?: string,
     *     DocumentTitle?: string,
     *     Content?: string,
     *     DocumentURI?: string,
     *     DocumentAttributes?: list<DocumentAttribute>,
     *     ScoreAttributes?: ScoreAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
