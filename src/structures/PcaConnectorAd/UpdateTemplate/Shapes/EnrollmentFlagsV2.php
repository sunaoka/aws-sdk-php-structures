<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableKeyReuseOnNtTokenKeysetStorageFull
 * @property bool|null $IncludeSymmetricAlgorithms
 * @property bool|null $NoSecurityExtension
 * @property bool|null $RemoveInvalidCertificateFromPersonalStore
 * @property bool|null $UserInteractionRequired
 */
class EnrollmentFlagsV2 extends Shape
{
    /**
     * @param array{
     *     EnableKeyReuseOnNtTokenKeysetStorageFull?: bool|null,
     *     IncludeSymmetricAlgorithms?: bool|null,
     *     NoSecurityExtension?: bool|null,
     *     RemoveInvalidCertificateFromPersonalStore?: bool|null,
     *     UserInteractionRequired?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
