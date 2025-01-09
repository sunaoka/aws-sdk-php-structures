<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableKeyReuseOnNtTokenKeysetStorageFull
 * @property bool $IncludeSymmetricAlgorithms
 * @property bool $NoSecurityExtension
 * @property bool $RemoveInvalidCertificateFromPersonalStore
 * @property bool $UserInteractionRequired
 */
class EnrollmentFlagsV4 extends Shape
{
    /**
     * @param array{
     *     EnableKeyReuseOnNtTokenKeysetStorageFull?: bool,
     *     IncludeSymmetricAlgorithms?: bool,
     *     NoSecurityExtension?: bool,
     *     RemoveInvalidCertificateFromPersonalStore?: bool,
     *     UserInteractionRequired?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
