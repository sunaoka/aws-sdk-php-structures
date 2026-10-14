<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $crossAccountRole
 * @property string|null $externalId
 * @property string $documentArn
 * @property list<SsmTarget> $targets
 * @property array<string, list<string>>|null $parameters
 * @property string|null $documentVersion
 */
class SsmDocumentConfig extends Shape
{
    /**
     * @param array{
     *     crossAccountRole?: string|null,
     *     externalId?: string|null,
     *     documentArn: string,
     *     targets: list<SsmTarget>,
     *     parameters?: array<string, list<string>>|null,
     *     documentVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
