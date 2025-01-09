<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCompilationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputLocation
 * @property 'lambda'|'ml_m4'|'ml_m5'|'ml_m6g'|'ml_c4'|'ml_c5'|'ml_c6g'|'ml_p2'|'ml_p3'|'ml_g4dn'|'ml_inf1'|'ml_inf2'|'ml_trn1'|'ml_eia2'|'jetson_tx1'|'jetson_tx2'|'jetson_nano'|'jetson_xavier'|'rasp3b'|'rasp4b'|'imx8qm'|'deeplens'|'rk3399'|'rk3288'|'aisage'|'sbe_c'|'qcs605'|'qcs603'|'sitara_am57x'|'amba_cv2'|'amba_cv22'|'amba_cv25'|'x86_win32'|'x86_win64'|'coreml'|'jacinto_tda4vm'|'imx8mplus' $TargetDevice
 * @property TargetPlatform $TargetPlatform
 * @property string $CompilerOptions
 * @property string $KmsKeyId
 */
class OutputConfig extends Shape
{
    /**
     * @param array{
     *     S3OutputLocation: string,
     *     TargetDevice?: 'lambda'|'ml_m4'|'ml_m5'|'ml_m6g'|'ml_c4'|'ml_c5'|'ml_c6g'|'ml_p2'|'ml_p3'|'ml_g4dn'|'ml_inf1'|'ml_inf2'|'ml_trn1'|'ml_eia2'|'jetson_tx1'|'jetson_tx2'|'jetson_nano'|'jetson_xavier'|'rasp3b'|'rasp4b'|'imx8qm'|'deeplens'|'rk3399'|'rk3288'|'aisage'|'sbe_c'|'qcs605'|'qcs603'|'sitara_am57x'|'amba_cv2'|'amba_cv22'|'amba_cv25'|'x86_win32'|'x86_win64'|'coreml'|'jacinto_tda4vm'|'imx8mplus',
     *     TargetPlatform?: TargetPlatform,
     *     CompilerOptions?: string,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
